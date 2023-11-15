<!DOCTYPE html>
<html>
<head>
    <title>Div Display Example</title>
    <style>
        .hidden-div {
            display: none;
        }
    </style>
</head>
<body>
    <button id="showDivButton">red</button>
    <button id="hidDivButton">green</button>
    <div class="hidden-div" id="divToShow" style="background-color: red;">This is the div to show.</div>
    <div id="divToHide" style="background-color: green;">This is the div to hide.</div>
    
    <script>
        const showDivButton = document.getElementById("showDivButton");
        const hidDivButton = document.getElementById("hidDivButton");
        const divToShow = document.getElementById("divToShow");
        const divToHide = document.getElementById("divToHide");
        
        showDivButton.addEventListener("click", function() {
            divToShow.style.display = "block";
            divToHide.style.display = "none";
        });

        hidDivButton.addEventListener("click", function() {
            divToShow.style.display = "none";
            divToHide.style.display = "block";
        });
    </script>
</body>
</html>
