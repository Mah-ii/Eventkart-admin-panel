const showSidebarBtn = document.querySelector('#show_sidebar_phone');
const showSidebarBtnPc = document.querySelector('#show_sidebar_pc');
const closeSidebarBtn = document.querySelector('#close_sidebar');
const overlay = document.querySelector('#overlay');
const wrapper = document.querySelector('.wrapper');

showSidebarBtn.onclick = function () {
  wrapper.classList.toggle('show');
}

closeSidebarBtn.onclick = function () {
  wrapper.classList.remove('show');
}

overlay.onclick = function () {
  wrapper.classList.remove('show');
}

showSidebarBtnPc.onclick = function () {
  wrapper.classList.toggle('show_pc');
}


const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
tooltipTriggerList.forEach(function (item) {
  new bootstrap.Tooltip(item);
});



/*
const collapseElement = document.querySelector('[data-bs-toggle="collapse"]');
let isCollapsed = true;

collapseElement.addEventListener('click', function () {
  if (isCollapsed) {
    this.classList.add('collapsed');
    isCollapsed = false;
  } else {
    this.classList.remove('collapsed');
    isCollapsed = true;
  }
});



*/

/*

const childItems = document.querySelectorAll('#masterCollapse .nav-item');
const parentCollapse = document.querySelector('#masterCollapse');

for (let i = 0; i < childItems.length; i++) {
  if (childItems[i].classList.contains('active')) {
    parentCollapse.classList.add('show');
    collapseElement.classList.add('collapsed');
    break;
  }
}

*/
