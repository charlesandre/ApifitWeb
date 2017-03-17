function f() {
  document.getElementsByClassName('dropdown')[0].classList.toggle('down');
  document.getElementsByClassName('arrow')[0].classList.toggle('gone');
  if (document.getElementsByClassName('dropdown')[0].classList.contains('down')) {
    setTimeout(function() {
      document.getElementsByClassName('dropdown')[0].style.overflow = 'visible'
    }, 500)
  } else {
    document.getElementsByClassName('dropdown')[0].style.overflow = 'hidden'
  }
}


function f_message() {
  document.getElementsByClassName('dropdown1')[0].classList.toggle('down');
  document.getElementsByClassName('arrow1')[0].classList.toggle('gone');
  if (document.getElementsByClassName('dropdown1')[0].classList.contains('down')) {
    setTimeout(function() {
      document.getElementsByClassName('dropdown1')[0].style.overflow = 'visible'
    }, 500)
  } else {
    document.getElementsByClassName('dropdown1')[0].style.overflow = 'hidden'
  }
}
function f_amis() {
  document.getElementsByClassName('dropdown2')[0].classList.toggle('down');
  document.getElementsByClassName('arrow2')[0].classList.toggle('gone');
  if (document.getElementsByClassName('dropdown2')[0].classList.contains('down')) {
    setTimeout(function() {
      document.getElementsByClassName('dropdown2')[0].style.overflow = 'visible'
    }, 500)
  } else {
    document.getElementsByClassName('dropdown2')[0].style.overflow = 'hidden'
  }
}
function f_notif() {
  document.getElementsByClassName('dropdown3')[0].classList.toggle('down');
  document.getElementsByClassName('arrow3')[0].classList.toggle('gone');
  if (document.getElementsByClassName('dropdown3')[0].classList.contains('down')) {
    setTimeout(function() {
      document.getElementsByClassName('dropdown3')[0].style.overflow = 'visible'
    }, 500)
  } else {
    document.getElementsByClassName('dropdown3')[0].style.overflow = 'hidden'
  }
}
