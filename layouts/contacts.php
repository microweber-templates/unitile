<?php

/*

type: layout
content_type: static
name: Contact Us

description: Contact us layout
position: 7
*/


?>
<?php include template_dir(). "header.php"; ?>

<div id="content">


<script>

$(document).ready(function(){
    mw.tabs({
        nav:'.cxmenu a',
        tabs:'.cxtab'
    })
});


</script>



    <div class="cxmenu">
        <a href="javascript:;"><span class="icona icona-phone"></span>Contact Us</a>
        <a href="javascript:;"><span class="icona icona-case"></span>Business Partners</a>
    </div>

<div class="cxtab">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30158.708484699007!2d72.85098086872306!3d19.114736972190286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b61b41dfb131%3A0xa668297563ddac31!2sAndheri+East%2C+Mumbai%2C+Maharashtra%2C+India!5e0!3m2!1sen!2sbg!4v1446568616881"

        width="100%"
        height="350"
        frameborder="0"
        style="border:0"
        allowfullscreen>
    </iframe>

    <div class="container">
        <div class="contact-blox">
            <div class="contact-block">
                   <div class="contact-block-top">
                      Head Office Mumbai
                      <span class="building1"></span>
                   </div>
                   <div class="contact-block-content">
                       <ul>
                           <li class="li-addr">Unit No. 2-G, Laxmi Industrial Estate, New Link Road, Andheri (W), Mumbai  400 053 INDIA.</li>
                           <li class="li-mob">+91 99020 10917</li>
                           <li class="li-phone">+91 22  2630 5270 / 72 / 73</li>
                       </ul>
                   </div>
               <div class="contact-block-bottom">info@united-group.in</div>
            </div>
            <div class="contact-block">
                   <div class="contact-block-top">
                      International Marketing Office
                      <span class="building1"></span>
                   </div>
                   <div class="contact-block-content">
                       <ul>
                           <li>Gala No.58, Sy. No. 35/2, 6th Main, Singasandra, Hosur Main Road, Bengaluru - 560 068.</li>
                           <li>+91 80 2573 0562/3359</li>
                       </ul>
                   </div>
               <div class="contact-block-bottom">info@united-group.in</div>
            </div>
            <div class="x-title">
               <div class="x-title-content">Head Office</div>
            </div>
        </div>
        <div class="contact-blox" style="float: right">
            <div class="contact-block">
                   <div class="contact-block-top">
                      Head Office Mumbai
                      <span class="building2"></span>
                   </div>
                   <div class="contact-block-content">
                       <ul>
                           <li class="li-addr">Unit No. 2-G, Laxmi Industrial Estate, New Link Road, Andheri (W), Mumbai  400 053 INDIA.</li>
                           <li class="li-mob">+91 99020 10917</li>
                           <li class="li-phone">+91 22  2630 5270 / 72 / 73</li>
                       </ul>
                   </div>
               <div class="contact-block-bottom">info@united-group.in</div>
            </div>
            <div class="contact-block">
                   <div class="contact-block-top">
                      Head Office Mumbai
                      <span class="building2"></span>
                   </div>
                   <div class="contact-block-content">
                       <ul>
                           <li class="li-addr">Unit No. 2-G, Laxmi Industrial Estate, New Link Road, Andheri (W), Mumbai  400 053 INDIA.</li>
                           <li class="li-mob">+91 99020 10917</li>
                           <li class="li-phone">+91 22  2630 5270 / 72 / 73</li>
                       </ul>
                   </div>
               <div class="contact-block-bottom">info@united-group.in</div>
            </div>
            <div class="contact-block">
                   <div class="contact-block-top">
                      Head Office Mumbai
                      <span class="building2"></span>
                   </div>
                   <div class="contact-block-content">
                       <ul>
                           <li class="li-addr">Unit No. 2-G, Laxmi Industrial Estate, New Link Road, Andheri (W), Mumbai  400 053 INDIA.</li>
                           <li class="li-mob">+91 99020 10917</li>
                           <li class="li-phone">+91 22  2630 5270 / 72 / 73</li>
                       </ul>
                   </div>
               <div class="contact-block-bottom">info@united-group.in</div>
            </div>
            <div class="contact-block">
                   <div class="contact-block-top">
                      International Marketing Office
                      <span class="building2"></span>
                   </div>
                   <div class="contact-block-content">
                       <ul>
                           <li>Gala No.58, Sy. No. 35/2, 6th Main, Singasandra, Hosur Main Road, Bengaluru - 560 068.</li>
                           <li>+91 80 2573 0562/3359</li>
                       </ul>
                   </div>
               <div class="contact-block-bottom">info@united-group.in</div>
            </div>
            <div class="x-title">
               <div class="x-title-content">Regizonal Offices</div>
            </div>
        </div>



    <div class="mw-ui-row">
        <div class="mw-ui-col" style="width: 460px;">
            <div class="mw-ui-col-container">

            <div id="sayhello">


Say Hello!
Get In Touch

Fill up this form to contact usif you have any futher questions.

Our motivation "Perfection simplified" helps to craft meaningful experiences for the people around us,
This mission inspires us to jump out of bed each day and guides every aspect of
what we do.

            </div>

            </div>
        </div>
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <form class="c-form" style="padding-top: 11px;">
                    <script>
                        $(document).ready(function(){
                            $(".s-field").on('click', function(e){
                                if(e.target.nodeName != 'INPUT'){
                                    $('input,textarea', this).focus();
                                }
                            });
                            $('.s-field input,.s-field textarea').on('focus blur', function(e){
                                $(this.parentNode)[e.type=='focus'?'addClass':'removeClass']('focused');
                                $(this.parentNode)[this.value.replace(/ /g,'') != ''?'addClass':'removeClass']('hasValue');
                            });


                            $(".c-form").on('submit', function(){
                               var data = {};
                               $(".c-form input,.c-form textarea").each(function(){
                                    data[this.name] = this.value;
                               });
                            });
                        });
                    </script>
                    <div class="mw-ui-row">
                        <div class="mw-ui-col">
                            <div class="mw-ui-col-container">
                                <div class="s-field">
                                    <span class="s-field-title">First Name</span>
                                    <input type="text" name="First Name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="mw-ui-col">
                            <div class="mw-ui-col-container">
                                <div class="s-field">
                                    <span class="s-field-title">Last Name</span>
                                    <input type="text" name="Last Name" required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-field">
                        <span class="s-field-title">Email</span>
                        <span class="s-field-description">This Can Be Change Later</span>
                        <input type="email" name="Email" required="required">
                    </div>
                    <div class="s-field s-area">
                        <span class="s-field-title">Message</span>
                        <textarea name="Message" required="required"></textarea>
                    </div>
                    <div class="cform-footer">
                        <i> hereby certify that the information above is true and accurate.</i>
                        <button type="submit" class="csubmit" id="contact_submit">&nbsp;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





</div>

<div class="cxtab">
2
</div>





</div>
</div>
<?php include template_dir(). "footer.php"; ?>
