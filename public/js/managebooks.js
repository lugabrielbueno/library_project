// async function searchBook(title_author){

// 	try{

// 	const response = await fetch(`/managebooks/searchbook`,{method: 'POST',  headers: {
//                'Content-Type': 'application/json',
//                'Accept': 'application/json',
//                'url': '/payment',
//             }})
// 	const datas = await response.json()
// 	if (datas){


// 	}
// 	}catch(error){
// 		console.error(error)
// 	}


// }

function addBookField(elem) {

	const newField = document.getElementsByClassName('field_book')[0].cloneNode(true)

	document.getElementById('field_book').appendChild(newField)
	return
}


function removeBookField(elem) {

	const newField = document.getElementsByClassName('field_book')[-1].cloneNode(true)

	document.getElementById('field_book').remove(elem)
	return
}
