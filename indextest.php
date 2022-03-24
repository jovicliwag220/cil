<script>

function search(string){
        var xmlhttp;
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("XMLHTTP");
        }
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById("search_div").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "search.php?s="+string, true);
        xmlhttp.send(null);
}

function setName(string) {

    document.getElementById("name").value = string;
}

</script>

<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    <input id="name" type="text" name="name" class="validate" onkeyup="search(this.value)">
    <label for="name">Doctor's Name</label>
    <div id="search_div">
</div>