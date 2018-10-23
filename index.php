<!DOCTYPE html>
<html lang="en">
<head>
      <title>Hello World</title>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <div id="root">
    	<input type="text" id="input" v-model="message">
    	<p>The value of input is: {{ message }}</p>
    </div>

    <script>
    	// document.querySelector('#input').value = data.message;
    	new Vue({
    		el: '#root',
    		data: {
	    		message: 'Hello World'
	    	}
    	})
    </script>
</body>
</html>