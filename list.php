<!DOCTYPE html>
<html lang="en">
<head>
      <title>List</title>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <div id="root">
    	<ul>
            <!-- <li v-for="name in names">{{ name }}</li>   -->
            <li v-for="name in names" v-text="name"></li> 
        </ul>
        <input type="text" id="input" v-model="newName"> <!-- v-on:keyUp="addName" // Digunakan untuk input event change -->
        <button v-on:click="addName">Add Name</button> <!-- fungsi v-on:click sama saja dengan @click="addName" -->
    </div>

    <script>
    	// document.querySelector('#input').value = data.message;
    	var app = new Vue({
    		el: '#root',
    		data: {
                newName:'',
	    		names: ['Joe', 'Mary', 'Jane', 'Jack']
	    	},

            methods: {
                addName(){
                    this.names.push(this.newName);
                    this.newName = '';
                }
            }

            // mounted(){
            //     document.querySelector('#button').addEventListener('click', ()=>{
            //         let name = document.querySelector('#input');
            //         app.names.push(name.value);
            //         name.value = '';
            //     });
            // }
    	});

        // document.querySelector('#button').addEventListener('click', ()=>{
        //     let name = document.querySelector('#input');
        //     app.names.push(name.value);
        //     name.value = '';
        // });
    </script>
</body>
</html>