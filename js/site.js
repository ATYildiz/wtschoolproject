function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}

$(function () {
    $(".gonder").on("click",function(){

        if($("input[name=Adiniz]").val().length < 1)
            alert("Lütfen adınız & soyadınız alanını boş bırakmayın.");
        else if($("input[name=MailAdresi]").val().length < 1)
            alert("Lütfen mail adresinizi boş bırakmayınız.");
        else if($("textarea[name=Mesaj]").val().length < 1)
            alert("Lütfen mesaj alanını boş bırakmayınız.");
        else if(!validateEmail($("input[name=MailAdresi]").val()))
            alert("Lütfen geçerli bir mail adresi giriniz.");
        else
            $("#iletisimFormu").submit();

    });

    
});