$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

    var links = document.querySelectorAll(".delete")
    for (const link of links) {
        console.log(link)
        link.onclick = function(e) {
            e.preventDefault()
            linkID = link.getAttribute('id')
            linkID = linkID.split('-')
            linkID = linkID[2]
            swal({
                title: "Estás seguro?",
                text: "Una vez eliminado, no podrás recuperar este registro",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    var form = document.getElementById(linkID) 
                    console.log(form) 	
                    form.submit();
                    swal("El registro ha sido eliminado.", {
                    icon: "success",
                    });
                } else {
                    swal("El registro no se ha eliminado.");
                }
            });
        }
    }

    


});