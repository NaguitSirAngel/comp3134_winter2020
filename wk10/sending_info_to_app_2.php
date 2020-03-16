<input id="q" placeholder="Enter Text">
<br/>
<button onclick="myFunc()">Submit</button>

<p id="out"></p>
<script>
function myFunc() {
    var input;
    input = document.getElementById("q").value;
    document.getElementById("out").innerHTML = input;
}
</script>