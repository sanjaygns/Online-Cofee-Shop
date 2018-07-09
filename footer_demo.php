
<style>

div.row_footer{
max-width:100%;
margin-top: -25px;
}
div.bg1{
    background-color: #333335;
}
div.bg2{
    background-color: #454649;
}
div.panel {
    padding: 15px 0px 15px 5px;
    background-color: #454649;
    color: white;
}
div.panel1 {
    padding: 15px 0px 15px 5px;
    background-color: #333335;
    color: white;
}
p.panel_bg{
    background-color: #454649;
}
/*div.panel2 {
    padding: 15px 0px 37px 5px;
    background-color: #454649;
    color: white;
} */
#bg1{
    padding: 12px;
    background-color: #333335;
    color: white;
    border-style: none;
}
#bg2{
    padding: 12px;
    background-color: #333335;
    color: white;
    border-style: none;
}
#bg3{
    padding: 12px;
    background-color: #333335;
    color: white;
    border-style: none;
}
#bg4{
    padding: 11px;
    background-color: #454649;
    color: white;
    border-style: none;
}

div.panel.show {
    display: block;
}
/*div.panel2.show {
    display: block;
}*/
@media screen and (max-width: 450px){
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd; 
}

div.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
}
div.panel1 {
    padding: 0 18px;
    display: none;
    background-color: white;
}

div.panel.show {
    display: block;
}
div.panel1.show {
    display: block;
}
/*div.panel2 {
    padding: 0 18px;
    display: none;
    background-color: white;
}

div.panel2.show {
    display: block;
}*/
}
</style>


    <div class="w3-row row_footer" >
        <div class="w3-col l3 bg1">
            <button id="bg1" class="accordion">Coffee Subscription</button>
            <div class="panel1 w3-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="w3-col l3 bg1">
            <button id="bg2" class="accordion">Shop</button>
            <div class="panel1 w3-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="w3-col l3 bg1">
            <button id="bg3" class="accordion">Business</button>
            <div class="panel1 w3-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="w3-col l3 bg2">
            <button id="bg4" class="accordion">Kupsip Club</button>
            <div class="panel w3-margin">
                <p class="panel_bg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;
if (window.matchMedia("(max-width: 500px)").matches) {
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
            }
        }
    }
else{
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
    }
}
</script>



