
<nav class="navbar navbar-default megamenu">
    <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
    </div>
    <!-- end navbar-header -->
    <div id="defaultmenu" class="navbar-collapse collapse">
        <ul class="nav navbar-nav" id="menuBar">
            <?php
            $data = $this->session->userdata();
//            print_r($data['Pages']);
            if (isset($data['Pages'])) {
                foreach ($data['Pages'] as $key => $value) {
                    
                    if (count($value) > 0 && count($value) < 2) {
                        
                        echo '<li>
                <a href="' . base_url() . $value[0]->path . '"> ' . $key . ' </a>
            </li>';
                        
                        
                    } else if (count($value) > 0 && count($value) > 1) {
//                        print_r($value);
                        echo '<li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> ' . $key . ' <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu">';
                        foreach ($value as $temp) {
                            
                            echo '<li><a href="'. base_url().$temp->path.'"> '.$temp->activity.' </a></li>';
                        }

                        echo '</ul>
            </li>';
                    }
                }
            } else {
                
            }
       $this->view('admin/navigation/design_menubar');
            ?>
        </ul>
        <!-- end nav navbar-nav -->
    </div>
    <!-- end #navbar-collapse-1 -->
</nav>
<!--include code-->
<!-- end navbar navbar-default megamenu -->
</div>
</header>
<!--===================================================-->
<!--END NAVBAR-->