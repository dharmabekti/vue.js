<!DOCTYPE html>
<html lang="en">
<head>
      <title>Attribute and Class Binding</title>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <style type="text/css">
          .color-red{
            color: red;
          }
          .is-loading {
            background: red;
          }
      </style>
</head>
<body>
    <div id="root">
        <h1 :class="className">Hello World</h1>
        <button v-bind:title="title" :class="{ 'is-loading': isLoading }" @click="toggleClass">Toggle Me</button> <!-- <button :title="title">Hover Over Me</button> penggunaan sama -->
    </div>

    <script>
    	// document.querySelector('#input').value = data.message;
    	var app = new Vue({
    		el: '#root',
    		data: {
                title: 'Now the Title is being set through JavaScript.',
                className: 'color-red',
                isLoading: false
	    	},

            methods: {
                toggleClass() {
                    this.isLoading= true;
                }
            }
    	});
    </script>
</body>
</html>