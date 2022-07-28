$(document).ready(function () {
    $("#image").change(function(e) {
       
            var file = e.target.files[0];
    
            var img = document.getElementById("output");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
        
    });
});
 