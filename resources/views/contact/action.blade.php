
    <td><button type="submit" class="btn-warning" onClick="location.href = '{{ action('ContactController@show', [$contact->id]) }}'"> Show More </button>

    	<button type="submit" class="btn-info" onClick="location.href = '{{ action('ContactController@edit', [$contact->id]) }}'"> Edit </button>



    	<span style="display: inline-table;">
    	{{ Form::open(['method' => 'DELETE', 'route' =>['contact.destroy', $contact->id]]) }}
		{{ Form::submit('Delete', ['class' => 'btn-danger']) }}
		{{ Form::close() }}
		</span>
		

	</td>