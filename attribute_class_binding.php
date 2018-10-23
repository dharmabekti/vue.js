<!DOCTYPE html>
<html lang="en">
<head>
      <title>Attribute and Class Binding</title>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <div id="root">
        <button v-bind:title="title">Hover Over Me</button> <!-- fungsi v-on:click sama saja dengan @click="addName" -->
    </div>

    <script>
    	// document.querySelector('#input').value = data.message;
    	var app = new Vue({
    		el: '#root',
    		data: {
                title: 'Now the Title is being set through JavaScript.'
	    	},
    	});
    </script>
</body>
</html>