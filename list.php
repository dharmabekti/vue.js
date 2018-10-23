<!DOCTYPE html>
<html lang="en">
<head>
      <title>Hello World</title>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <div id="root">
    	<ul>
            <!-- <li v-for="name in names">{{ name }}</li>   -->
            <li v-for="name in names" v-text="name"></li> 
        </ul>
        <input type="text" id="input">
        <button id="button">Add Name</button>
    </div>

    <script>
    	// document.querySelector('#input').value = data.message;
    	var app = new Vue({
    		el: '#root',
    		data: {
	    		names: ['Joe', 'Mary', 'Jane', 'Jack']
	    	},

            mounted(){
                document.querySelector('#button').addEventListener('click', ()=>{
                    let name = document.querySelector('#input');
                    app.names.push(name.value);
                    name.value = '';
                });
            }
    	});

        // document.querySelector('#button').addEventListener('click', ()=>{
        //     let name = document.querySelector('#input');
        //     app.names.push(name.value);
        //     name.value = '';
        // });
    </script>
</body>
</html>