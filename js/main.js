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


Vue.component('message', {
	props: ['title', 'body'],
	data(){
		return {
			isVisible: true
		};
	},

	template: `
		<article class="message" v-show="isVisible">
	        <div class="message-header">
	          <p>{{ title }}</p>
	          <button class="delete" aria-label="delete" @click="hideMessage"></button>
	        </div>
	        <div class="message-body">
	          {{ body }}
	        </div>
	    </article>
	`,
	// Dapat juga menggunakan 
	// <button class="delete" aria-label="delete" @click="isVisible = false"></button>

	methods: {
		hideMessage(){
			this.isVisible=false;
		}
	}
});

Vue.component('modal', {
	template: `
		<div class="modal is-active">
	        <div class="modal-background"></div>
	        <div class="modal-content">
	          <div class="box">
	            <slot></slot>
	          </div>
	        </div>
	        <button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
	    </div>
	`,
});

new Vue({
	el: '#root',
	data: {
		showModal: false
	}
});