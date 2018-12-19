<?php 


?>



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
                    data: "chatMessage=" +theVar,

                    success: function(response) {
                        console.log(response + " is the pasted text");
                        $("#displayedText").text(response);                       

                    }
                });
                e.preventDefault();

            });

            $(document).ready(function(){
                $("span").click(function(){
                    $(this).hide();
                });
            });
    
        </script>

        <input type="text" name="pastedText" id="thePastedStuff">
        <button type = "submit" id="daButton">Let's go</button>

        <h3>Don't like what you see? Click any of the words below to remove them</h3>
            
               
        <p id="displayedText">

</p>
       
<?php
 
    if(count($arrayOfWords) > 0){
        foreach ($arrayOfWords  as $entry){
            echo "<span> $entry" . " " . "</span>";
    }
    }
    
?>

            </div>  
    </body>
</html>