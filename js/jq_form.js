const forms_das = document.querySelector('#forms_dash')
const forms_id = document.querySelector('#forms_id')
const forms_tbl = document.querySelector('#forms_tbl')
const forms_pg = document.querySelector('#forms_pg')
var val

let member_dom = Array.from(document.querySelectorAll('.member_id_'))
member_dom.forEach((e) => {
  e.addEventListener('click', (e) => {
    // console.log(e)
    e.preventDefault()
    val = 'code4/form_id'
    method = 'post'
    ajaxx(method, val)
  })
})
let admin_dom = Array.from(document.querySelectorAll('.admin_id_'))
admin_dom.forEach((e) => {
  e.addEventListener('click', (e) => {
    console.log(e)
    e.preventDefault()
    val = 'code4/form_id'
    method = 'post'
    ajaxx(method, val)
    location.href = '#adad'
  })
})
forms_das.onclick = (e) => {
  e.preventDefault()
  val = 'code4/dash'
  forms_id.querySelector('.trg').classList.remove('spn')
  forms_tbl.querySelector('.trg').classList.remove('spn')
  forms_pg.querySelector('.trg').classList.remove('spn')
  forms_das.querySelector('.trg').classList.add('spn')
  method = 'post'
  ajaxx(method, val)
}
forms_id.onclick = (e) => {
  e.preventDefault()
  val = 'code4/form_id'
  forms_tbl.querySelector('.trg').classList.remove('spn')
  forms_pg.querySelector('.trg').classList.remove('spn')
  forms_das.querySelector('.trg').classList.remove('spn')
  forms_id.querySelector('.trg').classList.add('spn')
  method = 'post'
  ajaxx(method, val)
}
forms_tbl.onclick = (e) => {
  e.preventDefault()
  val = 'code4/forms_tbl'
  forms_id.querySelector('.trg').classList.remove('spn')
  forms_pg.querySelector('.trg').classList.remove('spn')
  forms_das.querySelector('.trg').classList.remove('spn')
  forms_tbl.querySelector('.trg').classList.add('spn')
  method = 'post'
  ajaxx(method, val)
}
forms_pg.onclick = (e) => {
  e.preventDefault()
  val = 'code4/forms_pg'
  forms_id.querySelector('.trg').classList.remove('spn')
  forms_tbl.querySelector('.trg').classList.remove('spn')
  forms_das.querySelector('.trg').classList.remove('spn')
  forms_pg.querySelector('.trg').classList.add('spn')
  ajaxx(val)
}
function del_fun(id) {
  if (confirm('Are you sure? You want to remove this member.') == true) {
    val = 'delete/' + id
    method = 'get'
    ajaxx(method, val)
  }
}
function edit_fun(id) {
  if (confirm('Are you sure? You want to edit this member.') == true) {
    val = 'update/' + id
    method = 'get'
    ajaxx(method, val)
  }
}
function ajaxx(method, val) {
  let xml = new XMLHttpRequest()
  xml.open(method, 'http://localhost/code_4/' + val, true)
  xml.onload = () => {
    if (xml.readyState === 4) {
      if (xml.status == 200) {
        let data = xml.response
        document.querySelector('.contant').innerHTML = data
      }
    }
  }
  xml.send()
}
const searchbar = document.querySelector('#search_inp')
let list = document.querySelector('.contant')
searchbar.onkeyup = () => {
  let searchterm = searchbar.value
  console.log(searchterm)
  if (searchterm == '') {
    searchbar.classList.add('start')
  } else {
    let xml = new XMLHttpRequest()
    xml.open('post', 'http://localhost/code_4/search/' + searchterm, true)
    xml.onload = () => {
      if (xml.readyState === 4) {
        if (xml.status == 200) {
          let data = xml.response
          list.innerHTML = data
        }
      }
    }
    xml.send()
  }
}
function member_function() {
  console.log('asjsoh');
  document.querySelector('#form_1').onsubmit = (e) => {
    e.preventDefault()
    data = {
      name: $('#inputAddress').val(),
      work: $('#inputAddress1').val(),
      status: $('.form-check-input:checked').val(),
      birth: $('#inputAddress3').val(),
      city: $('#inputAddress5').val(),
    }
    $.ajax({
      type: 'post',
      url: 'http://localhost/code_4/insert',
      data: data,
      success: function (response) {
        alert('Congrachulation! New member added successfuly.')
      },
    })
  }
}
function admin_function() {
  const form_2 = document.querySelector('#adad')
  form_2.onsubmit = (e) => {
    e.preventDefault()
    if ($('#id_pass').val() != $('#id_re').val()) {
      $('#id_re').addClass('is-invalid')
      alert('ERROR: password not match')
    } else {
      data = {
        name: $('#id_name').val(),
        work: $('#id_occu').val(),
        email: $('#id_email').val(),
        pass: $('#id_pass').val(),
        city: $('#id_city').val(),
      }
      $.ajax({
        type: 'post',
        url: 'http://localhost/code_4/insertad',
        data: data,
        // dataType: "dataType",
        success: function (response) {
          // console.log('done');
          alert(
            'Congrachulation! New Admin: ' +
              data['name'] +
              ' added successfuly.',
          )
        },
      })
    }
  }
}

function edit_function() {
  $('form').submit(function (e) {
    e.preventDefault()
    console.log('e')
    data = {
      name: $('#inputAddress').val(),
      work: $('#inputAddress1').val(),
      status: $('.form-check-input:checked').val(),
      birth: $('#inputAddress3').val(),
      city: $('#inputAddress5').val(),
    }
    $.ajax({
      type: 'post',
      url: 'http://localhost/code_4/upd',
      data: data,
      // dataType: "dataType",
      success: function (response) {
        console.log('done')
        // alert('Congrachulation! New member added successfuly.');
      },
    })
  })
}
