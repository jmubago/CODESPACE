var init = function(){
		
	jQuery.get( "../api/tareas", function(data){
		
		data.tareas.forEach(function(tarea){

			$('#listaElementos').
				append($('<li class="tarea" id="tarea_' + tarea.id + '">' + tarea.nombre +'</li>'));
		})

		
	} )

	$('#listaElementos').on('click','.tarea',function(evnt){

		jQuery.post( "../api/tarea/delete",{id:evnt.target.id.substring(6)} , function(tarea){
				debugger
				$(evnt.target).remove();
		

		
		} )

		
	})



$('#add').on('click',function(){

	jQuery.post( "../api/tarea/add",{nombre:$("#newTarea").val()} , function(tarea){
				
				$('#listaElementos').
			append($('<li class="tarea" id=tarea_"' + tarea.id + '">' + tarea.nombre +'</li>'));
		

		
	} )
		
})

};

$().ready(init)