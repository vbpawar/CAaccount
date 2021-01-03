<?php

class GSTModel extends CI_Model {

    public function get_details($roleid,$userid) {
        $result = [];
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT pf.gid,pf.gst_type,pf.nature_of_buss,pf.nature_of_buss,pf.buss_type,pf.male,pf.female,pf.status,pf.remark,pf.updatedat,pf.createdat,
        pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob,
        rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date,
        u.firstname,u.lastname,rd1.premise_name s_premise_name,rd1.flat_number s_flat_number,rd1.road s_road,rd1.area s_area,rd1.village s_village,rd1.taluka s_taluka,
        rd1.district s_district,rd1.state s_state,rd1.pincode s_pincode,u.roleid
        FROM gst_service pf JOIN personal_details pd ON pd.pid = pf.pid 
                JOIN residential_details rd ON rd.rid = pf.rid 
                JOIN shop_details sd ON sd.sid = pf.sid 
                JOIN residential_details rd1 ON sd.rid = rd1.rid 
                JOIN user_master u ON u.userid = pf.userid ORDER BY pf.gid DESC";
                  }else{
                    $sql = "SELECT pf.gid,pf.gst_type,pf.nature_of_buss,pf.nature_of_buss,pf.buss_type,pf.male,pf.female,pf.status,pf.remark,pf.updatedat,pf.createdat,
                    pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob,
                    rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date,
                    u.firstname,u.lastname,rd1.premise_name s_premise_name,rd1.flat_number s_flat_number,rd1.road s_road,rd1.area s_area,rd1.village s_village,rd1.taluka s_taluka,
                    rd1.district s_district,rd1.state s_state,rd1.pincode s_pincode,u.roleid
                    FROM gst_service pf JOIN personal_details pd ON pd.pid = pf.pid 
                            JOIN residential_details rd ON rd.rid = pf.rid 
                            JOIN shop_details sd ON sd.sid = pf.sid 
                            JOIN residential_details rd1 ON sd.rid = rd1.rid 
                            JOIN user_master u ON u.userid = pf.userid WHERE pf.userid=$userid ORDER BY pf.gid DESC";  
                }
        $query = $this->db->query($sql);
            $result['status'] = true;
            $result['data'] =  $query->result_array();       
        return $result;
    }   
    public function get_partners_details($id)
    {
        $sql = "SELECT * FROM gst_partners sp 
        JOIN partner_details pd ON pd.partnerid = sp.partnerid WHERE sp.gid = $id";
        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            $result['status'] = true;
            $result['data'] =  $query->result();
        }else{
            $result['status'] = false;
        }
     return $result;
    }
          
        public function updatestatus($id,$data)
        {
            $result = false;
            $this->db->where('gid',$id);
            if($this->db->update('gst_service',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }
        
 public function create_gst($data)
    {
      $pdetails = $data['pdetails'];
      $rdetails = $data['rdetails'];
      $sdetails = $data['sdetails'];
      $shop_details = $data['shop_details'];
      $partnerdata = $data['partnerdata'];
      $main = $data['main'];
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('personal_details', $pdetails);
        $result['pid'] =  $this->db->insert_id(); 

        $this->db->insert('residential_details', $rdetails);
        $result['rid'] =  $this->db->insert_id(); 

        $this->db->insert('residential_details', $sdetails);
        $result['r_id'] =  $this->db->insert_id();

        $shopdetails = array(
         'rid'=>$result['r_id'],
         'shop_name'=>$shop_details['shop_name'],
         'office_contact'=>$shop_details['office_contact'],
         'office_mailid'=>$shop_details['office_mailid'],
         'buss_start_date'=>$shop_details['buss_start_date']
        );

        $this->db->insert('shop_details', $shopdetails);
        $result['sid'] =  $this->db->insert_id();

        $gst_details = array(
            'pid'=>$result['pid'],
            'rid'=>$result['rid'],
            'sid'=>$result['sid'],
            'userid'=>$main['userid'],
            'nature_of_buss'=>$main['nature_of_buss'],
            'buss_type'=>$main['buss_type'],
            'male'=>$main['male'],
            'female'=>$main['female'],
            'gst_type'=>$main['gst_type']
        );
        $this->db->insert('gst_service', $gst_details);
        $result['gid'] =  $this->db->insert_id();
        $this->getpartnerdetails($partnerdata,$result['gid']);
        if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
            }
        else
        {
        $this->db->trans_commit();
      
        $result['status'] = true;
        return $result;
        }
    }
    public function getpartnerdetails($partner_data,$id)
    {
        foreach ($partner_data as $contact)
                    {
                        $partners = array(
                            'partner_name' => $contact->p_partner_name,
                            'aadhar_number' => $contact->p_aadhar_number,
                            'pan_number' => $contact->p_pan_number,
                            'contact_number'=>$contact->p_contact_number,
                            'emailid'=>$contact->p_emailid
                            );
                            $this->db->insert('partner_details', $partners);
                            $partnerid =  $this->db->insert_id();
                            if(isset($contact->p_photodoc)){
                            $this->upload_file($contact->p_photodoc);
                            }
                           $pdoc = '';
                           $adoc = '';
                           $pandoc = '';
                            if(isset($contact->p_photodoc)){
                               $pdoc= $this->upload_file($contact->p_photodoc);
                                }
                                if(isset($contact->p_adhardoc)){
                                   $adoc= $this->upload_file($contact->p_adhardoc);
                                    }
                                    if(isset($contact->p_pandoc)){
                                      $pandoc=  $this->upload_file($contact->p_pandoc);
                                        }
                                        $shop_partners=array( 
                                            'partnerid' => $partnerid,
                                            'gid'=>$id,
                                            'photo'=>$pdoc,
                                            'aadhar'=>$adoc,
                                            'pan'=>$pandoc
                                        );
                                        $this->db->insert('gst_partners', $shop_partners);
                                        $gid = $this->db->insert_id();
                    }
    }  
    function upload_file($encoded_string){
        $target_dir = './documents/gst/gst_partners/'; // add the specific path to save the file
        $filedata = explode(',', $encoded_string);
         $decoded_file = base64_decode($filedata[1]);
        //$decoded_file = base64_decode($encoded_string); // decode the file
        $mime_type = finfo_buffer(finfo_open(), $decoded_file, FILEINFO_MIME_TYPE); // extract mime type
        $extension = $this->mime2ext($mime_type); // extract extension from mime type
        $file = uniqid() .'.'. $extension; // rename file as a unique name
        $file_dir = $target_dir . uniqid() .'.'. $extension;
        try {
            file_put_contents($file_dir, $decoded_file); // save
            return $file_dir;
            // database_saving($file);
            // header('Content-Type: application/json');
            // echo json_encode("File Uploaded Successfully");
        } catch (Exception $e) {
            echo $e->getMessage();
            // header('Content-Type: application/json');
            // echo json_encode($e->getMessage());
        }
    
    }
    function mime2ext($mime){
        $all_mimes = '{"png":["image\/png","image\/x-png"],"bmp":["image\/bmp","image\/x-bmp",
        "image\/x-bitmap","image\/x-xbitmap","image\/x-win-bitmap","image\/x-windows-bmp",
        "image\/ms-bmp","image\/x-ms-bmp","application\/bmp","application\/x-bmp",
        "application\/x-win-bitmap"],"gif":["image\/gif"],"jpeg":["image\/jpeg",
        "image\/pjpeg"],"xspf":["application\/xspf+xml"],"vlc":["application\/videolan"],
        "wmv":["video\/x-ms-wmv","video\/x-ms-asf"],"au":["audio\/x-au"],
        "ac3":["audio\/ac3"],"flac":["audio\/x-flac"],"ogg":["audio\/ogg",
        "video\/ogg","application\/ogg"],"kmz":["application\/vnd.google-earth.kmz"],
        "kml":["application\/vnd.google-earth.kml+xml"],"rtx":["text\/richtext"],
        "rtf":["text\/rtf"],"jar":["application\/java-archive","application\/x-java-application",
        "application\/x-jar"],"zip":["application\/x-zip","application\/zip",
        "application\/x-zip-compressed","application\/s-compressed","multipart\/x-zip"],
        "7zip":["application\/x-compressed"],"xml":["application\/xml","text\/xml"],
        "svg":["image\/svg+xml"],"3g2":["video\/3gpp2"],"3gp":["video\/3gp","video\/3gpp"],
        "mp4":["video\/mp4"],"m4a":["audio\/x-m4a"],"f4v":["video\/x-f4v"],"flv":["video\/x-flv"],
        "webm":["video\/webm"],"aac":["audio\/x-acc"],"m4u":["application\/vnd.mpegurl"],
        "pdf":["application\/pdf","application\/octet-stream"],
        "pptx":["application\/vnd.openxmlformats-officedocument.presentationml.presentation"],
        "ppt":["application\/powerpoint","application\/vnd.ms-powerpoint","application\/vnd.ms-office",
        "application\/msword"],"docx":["application\/vnd.openxmlformats-officedocument.wordprocessingml.document"],
        "xlsx":["application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application\/vnd.ms-excel"],
        "xl":["application\/excel"],"xls":["application\/msexcel","application\/x-msexcel","application\/x-ms-excel",
        "application\/x-excel","application\/x-dos_ms_excel","application\/xls","application\/x-xls"],
        "xsl":["text\/xsl"],"mpeg":["video\/mpeg"],"mov":["video\/quicktime"],"avi":["video\/x-msvideo",
        "video\/msvideo","video\/avi","application\/x-troff-msvideo"],"movie":["video\/x-sgi-movie"],
        "log":["text\/x-log"],"txt":["text\/plain"],"css":["text\/css"],"html":["text\/html"],
        "wav":["audio\/x-wav","audio\/wave","audio\/wav"],"xhtml":["application\/xhtml+xml"],
        "tar":["application\/x-tar"],"tgz":["application\/x-gzip-compressed"],"psd":["application\/x-photoshop",
        "image\/vnd.adobe.photoshop"],"exe":["application\/x-msdownload"],"js":["application\/x-javascript"],
        "mp3":["audio\/mpeg","audio\/mpg","audio\/mpeg3","audio\/mp3"],"rar":["application\/x-rar","application\/rar",
        "application\/x-rar-compressed"],"gzip":["application\/x-gzip"],"hqx":["application\/mac-binhex40",
        "application\/mac-binhex","application\/x-binhex40","application\/x-mac-binhex40"],
        "cpt":["application\/mac-compactpro"],"bin":["application\/macbinary","application\/mac-binary",
        "application\/x-binary","application\/x-macbinary"],"oda":["application\/oda"],
        "ai":["application\/postscript"],"smil":["application\/smil"],"mif":["application\/vnd.mif"],
        "wbxml":["application\/wbxml"],"wmlc":["application\/wmlc"],"dcr":["application\/x-director"],
        "dvi":["application\/x-dvi"],"gtar":["application\/x-gtar"],"php":["application\/x-httpd-php",
        "application\/php","application\/x-php","text\/php","text\/x-php","application\/x-httpd-php-source"],
        "swf":["application\/x-shockwave-flash"],"sit":["application\/x-stuffit"],"z":["application\/x-compress"],
        "mid":["audio\/midi"],"aif":["audio\/x-aiff","audio\/aiff"],"ram":["audio\/x-pn-realaudio"],
        "rpm":["audio\/x-pn-realaudio-plugin"],"ra":["audio\/x-realaudio"],"rv":["video\/vnd.rn-realvideo"],
        "jp2":["image\/jp2","video\/mj2","image\/jpx","image\/jpm"],"tiff":["image\/tiff"],
        "eml":["message\/rfc822"],"pem":["application\/x-x509-user-cert","application\/x-pem-file"],
        "p10":["application\/x-pkcs10","application\/pkcs10"],"p12":["application\/x-pkcs12"],
        "p7a":["application\/x-pkcs7-signature"],"p7c":["application\/pkcs7-mime","application\/x-pkcs7-mime"],"p7r":["application\/x-pkcs7-certreqresp"],"p7s":["application\/pkcs7-signature"],"crt":["application\/x-x509-ca-cert","application\/pkix-cert"],"crl":["application\/pkix-crl","application\/pkcs-crl"],"pgp":["application\/pgp"],"gpg":["application\/gpg-keys"],"rsa":["application\/x-pkcs7"],"ics":["text\/calendar"],"zsh":["text\/x-scriptzsh"],"cdr":["application\/cdr","application\/coreldraw","application\/x-cdr","application\/x-coreldraw","image\/cdr","image\/x-cdr","zz-application\/zz-winassoc-cdr"],"wma":["audio\/x-ms-wma"],"vcf":["text\/x-vcard"],"srt":["text\/srt"],"vtt":["text\/vtt"],"ico":["image\/x-icon","image\/x-ico","image\/vnd.microsoft.icon"],"csv":["text\/x-comma-separated-values","text\/comma-separated-values","application\/vnd.msexcel"],"json":["application\/json","text\/json"]}';
        $all_mimes = json_decode($all_mimes,true);
        foreach ($all_mimes as $key => $value) {
            if(array_search($mime,$value) !== false) return $key;
        }
        return false;
    }
}
?>