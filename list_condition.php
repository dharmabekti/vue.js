<!DOCTYPE html>
<html lang="en">
<head>
      <title>The Need for Computed Properties</title>
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
      <!-- Bentuk Penulisan yang hasilnya sama  -->
      <h1 v-text="new Date()"></h1>
      <h1>{{ new Date() }}</h1>

      <!-- Membalikkan Kata -->
      <h1>{{ message }}</h1>
      <!-- <h1>{{ message.split('').reverse().join('') }}</h1> -->
      <h1>{{ reverseMessage }}</h1>

      <h2>All Tasks</h2>
      <ul>
        <li v-for="task in tasks" v-text="task.description"></li>
      </ul>

      <h2>Completed Tasks</h2>
      <ul>
        <li v-for="task in tasks" v-if="task.completed" v-text="task.description"></li>
      </ul>

      <h2>Incompleted Tasks</h2>
      <ul>
        <li v-for="task in incompletedTask" v-text="task.description"></li> <!-- Incompleted Task dapat menggunakan v-if="!task.completed" -->
      </ul>

    </div>

    <script>
    	// document.querySelector('#input').value = data.message;
    	var app = new Vue({
    		el: '#root',
    		data: {
          message: 'Hello World',
          tasks: [
            { description: 'Go to the Store', completed: true },
            { description: 'Finnish Screencast', completed: false },
            { description: 'Make Donation', completed: false },
            { description: 'Clear Inbox', completed: false },
            { description: 'Make Dinner', completed: false },
            { description: 'Clean Room', completed: true }
          ]
	    	},
        computed: {
          reverseMessage(){
            return this.message.split('').reverse().join('');
          },

          incompletedTask() {
            return this.tasks.filter(task => !task.completed); // Kelemahan cara pendek tidak semua browser dapat membacanya.

            // Jika menggunakan cara panjang dapat dilihat di bawah ini.
            // return this.tasks.filter(function (task) {
            //   return !task.completed;
            // })
          }
        }
    	});
    </script>
</body>
</html>