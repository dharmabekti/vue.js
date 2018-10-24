Vue.component('task-list', {
	template: `
		<div>
			<task v-for="task in tasks">{{ task.task }}</task>
		</div>
	`,

	data(){
		return {
			tasks: [
				{ task: 'Go to The Store', complete: true },
				{ task: 'Go to The Email', complete: false },
				{ task: 'Go to The Farm', complete: true },
				{ task: 'Go to Work', complete: false }
			]
		};
	}
});


Vue.component('task', {
	template: '<li><slot></slot></li>'
});


new Vue({
	el: '#root'
});