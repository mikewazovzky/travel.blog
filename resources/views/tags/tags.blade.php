@extends('layouts.blog')

@section('blog-content')
	<style>
		.input-tag {
			height: 28px !important;
		}
		.tr-tag {
			padding: 5px !important;
		}
	</style>
	<h1>Tags adminitration page</h1>
	<hr>
	@verbatim
		<div id="tags">
			<h3>{{ message }}</h3>
			<table class="table table-striped">
				<tr>
					<th class="col-xs-8">Tag Name</th>
					<th class="col-xs-2"></th>
					<th class="col-xs-2"></th>
				</tr>
				<tbody v-for="(tag, index) in tags">
					<!-- Show Tag -->
					<tr v-if="!tag.editMode">
						<td>{{ tag.name }}</td>
						<td><button class="btn btn-xs btn-block btn-warning" @click="onEdit(index)">Edit</button></td>
						<td><button class="btn btn-xs btn-block btn-danger" @click="onDelete(index)">Delete</button></td>
					</tr>	
					<!-- Edit Tag -->
					<tr v-if="tag.editMode">
						<td class="tr-tag"><input class="form-control input-tag" v-model="editName"></td>
						<td><button class="btn btn-xs btn-block btn-primary" @click="onUpdate(index)">Update</button></td>
						<td><button class="btn btn-xs btn-block btn-warning" @click="tag.editMode = false">Cancel</button></td>
					</tr>	

				</tbody>		
			</table>

			<h3>Create new Tag</h3>
			<table class="table table-striped">
				<!-- Create Tag -->
				<tr>
					<form>
						<td class="col-xs-8 tr-tag"><input class="form-control input-tag" v-model="createName"></td>
						<td class="col-xs-2"></td>
						<td class="col-xs-2"><button class="btn btn-xs btn-block btn-primary" @click="onCreate">Create</button></td>
					</form>
				</tr>	
			</table>			

		</div>
	@endverbatim
@stop


@section('footer.scripts')

<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
<script type="text/javascript">

let elements = [];

window.onload = function () {
    var vm = new Vue({
        el: '#tags',
        
        data: {
            message: 'Hello World!',
            tags: [],
            editName: '',
            createName: ''
        }, 

        created() {
        	// populate list of tags 
        	let request = $.ajax({
				url: '/api/tags'
			});

			request.then(function(data) {
				data.forEach(function(item) {	
					item['editMode'] = false;				
					vm.tags.push(item);
				});
				// console.log(vm.tags);
			});
        },

        methods: {
        	onDelete(index) {
        		let name = this.tags[index].name;
        		
        		// prepair ajax call
        		$.ajaxSetup({
        			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    			});

        		// ajax request to delete Tag from database
        		let request = $.ajax({
    				url: '/api/tags/' + name ,
    				type: 'DELETE'
				});

        		// handle response
				request.then(response => console.log(response));

				// delete tag from array
				this.tags.splice(index, 1);

        	},

        	onEdit(index) {
        		this.tags[index].editMode = true;
        		this.editName = this.tags[index].name;
        	},

        	onUpdate(index) {

        		let currentName = this.tags[index].name;
        		let newName = this.editName;

         		// prepair ajax call
        		$.ajaxSetup({
        			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    			});       	
    			
        		// ajax request to update Tag in a database
        		let request = $.ajax({
    				url: '/api/tags/' + currentName,
    				type: 'PATCH', 
    				data: {
    					name: newName
    				}
				});    	

        		// handle response
				request.then(response => console.log(response));

				// update tag 	
        		this.tags[index].name = this.editName;
        		this.tags[index].editMode = false;        		
        	},

        	onCreate() {
        		
        		// create new Tag
        		let tag = {
        			name: this.createName,
        			editMode: false
        		};

        		// prepair ajax call
        		$.ajaxSetup({
        			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    			});

        		// ajax request to create new Tag in database
        		let request = $.ajax({
    				url: '/api/tags/create',
    				type: 'POST',
    				data: {
    					name: this.createName
    				}
				});

        		// handle response
				request.then(response => console.log(response));

        		// add new Tag to array
        		this.tags.push(tag);
        		
        		// reset form parameters
        		this.createName = '';
        	}
        }
    });
}
</script>

@stop



