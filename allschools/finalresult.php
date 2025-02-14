<div id="reqs">
  <h3 align="center"> Requirements </h3>
</div>
<script>
  var reqs_id = 0;

  function removeElement(ev) {
    var button = ev.target;
    var field = button.previousSibling;
    var div = button.parentElement;
    div.removeChild(button);
    div.removeChild(field);
  }

  function add() {
    reqs_id++; // increment reqs_id to get a unique ID for the new element

    //create textbox
    var input = document.createElement('input');
    input.type = "text";
    input.setAttribute("class", "w3-input w3-border");
    input.setAttribute('id', 'reqs' + reqs_id);
    input.setAttribute('value', reqs_id);
    var reqs = document.getElementById("reqs");
    //create remove button
    var remove = document.createElement('button');
    remove.setAttribute('id', 'reqsr' + reqs_id);
    remove.onclick = function(e) {
      removeElement(e)
    };
    remove.setAttribute("type", "button");
    remove.innerHTML = "Remove" + reqs_id;
    //append elements
    reqs.appendChild(input);
    reqs.appendChild(remove);
  }

</script>
<button type="button" value="Add" onclick="javascript:add();"> Add</button>
