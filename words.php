<!DOCTYPE html>

<head>
<link rel="stylesheet" type="text/css" href="master.css">

</head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
        <script>

            $(document).on('click', "#daButton", function(e) {
                var theVar = $('#thePastedStuff').val();
                $.ajax({
                    url: "paragrapher.php",
                    type: "POST",
                    data: "chatMessage=" + theVar,

                    success: function(response) {
                        // console.log(response + " is the pasted text");
                        $("#displayedText").html(response);                       

                    }
                });
                e.preventDefault();

            });

            $(document).ready(function(){
                $("#displayedText").click(function(e){
                    $(e.target).hide();
                    console.log(e);
                    // $(this).hide();
                });
            });
    
        </script>
        <h2>Paste in your favorite passage here then click submit: </h2>
        <textarea name="pastedText" id="thePastedStuff"></textarea>
        <button type = "submit" id="daButton">Let's go</button>

        <h3>Don't like what you see? Click any of the words below to remove them</h3>
            
            <h4>
                <p id="displayedText">
                 
                 </p>
         
            </h4>


            </div>  
    </body>
</html>