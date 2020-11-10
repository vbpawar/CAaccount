<script>
$('input[type=radio]').on('change', function(){
    switch($(this).val()){
        case 'A' :
           $('#turn_over_amt').show();
            break;
        case 'B' :
            $('#turn_over_amt').hide();
            $('#turn_over_amt').val(' ');
            break;
        case 'C' :
           $('#loan_amt').show();
            break;
        case 'D' :
            $('#loan_amt').hide();
            $('#loan_amt').val(' ');
            break;
        case 'E' :
           $('#income_other_source').show();
            break;
        case 'F' :
            $('#income_other_source').hide();
            $('#income_other_source').val(' ');
            break;
        case 'G' :
           $('#licslip').show();
            break;
        case 'H' :
            $('#licslip').hide();
            $('#licslip').val(' ');
            break;
        case 'I' :
           $('#home_loan').show();
            break;
        case 'J' :
            $('#home_loan').hide();
            $('#home_loan').val(' ');
            break;
        case 'K' :
           $('#invest_amt').show();
            break;
        case 'L' :
            $('#invest_amt').hide();
            $('#invest_amt').val(' ');
            break;
        case 'M' :
           $('#sandry_credit').show();
            break;
        case 'N' :
            $('#sandry_credit').hide();
            $('#sandry_credit').val(' ');
            break;
        case 'O' :
           $('#sandry_debit').show();
            break;
        case 'P' :
            $('#sandry_debit').hide();
            $('#sandry_debit').val(' ');
            break;
        case 'Q' :
           $('#stock_amt').show();
            break;
        case 'R' :
            $('#stock_amt').hide();
            $('#stock_amt').val(' ');
            break;
        case 'S' :
           $('#cash_balance').show();
            break;
        case 'T' :
            $('#cash_balance').hide();
            $('#cash_balance').val(' ');
            break;
        case 'U' :
           $('#buss_loan').show();
            break;
        case 'V' :
            $('#buss_loan').hide();
            $('#buss_loan').val(' ');
            break;
        case 'W' :
           $('#pers_loan').show();
            break;
        case 'X' :
            $('#pers_loan').hide();
            $('#pers_loan').val(' ');
            break;
        case 'Y' :
           $('#inv_proof').show();
            break;
        case 'Z' :
            $('#inv_proof').hide();
            break;
        case 'k' :
           $('#bal_sheet').show();
            break;
        case 'l' :
            $('#bal_sheet').hide();
            break;
        case 'i' :
           $('#pe_loan').show();
            break;
        case 'j' :
            $('#pe_loan').hide();
            break;
        case 'g' :
           $('#home_cert').show();
            break;
        case 'h' :
            $('#home_cert').hide();
            break;
        case 'e' :
           $('#inc_other').show();
            break;
        case 'f' :
            $('#inc_other').hide();
            break;
        case 'c' :
           $('#lic_cert').show();
            break;
        case 'd' :
            $('#lic_cert').hide();
            break;
        case 'a' :
           $('#buss_loan_cert').show();
            break;
        case 'b' :
            $('#buss_loan_cert').hide();
            break;
    }            
});
</script>