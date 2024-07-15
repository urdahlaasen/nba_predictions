
const draggables = document.querySelectorAll('.draggable');
const containers = document.querySelectorAll('.sortable-list');
const form = document.getElementById('sortable-form');
const sortedOrderInput1 = document.getElementById('sortedOrder1');
const sortedOrderInput2 = document.getElementById('sortedOrder2');

// for alle dragable elementer, legg til dragstart og dragend eventlister
draggables.forEach(draggable => {
  draggable.addEventListener('dragstart', () => {
    draggable.classList.add('dragging');
  });

  draggable.addEventListener('dragend', () => {
    draggable.classList.remove('dragging');
  });
});

// legg til listener for boksen
containers.forEach(container => {
  container.addEventListener('dragover', e => {
    e.preventDefault();
    const afterElement = getDragAfterElement(container, e.clientY);
    const dragging = document.querySelector('.dragging');
    if (container.contains(dragging)) {
      if (afterElement == null) {
        container.appendChild(dragging);
      } else {
        container.insertBefore(dragging, afterElement);
      }
    }
  });
});



function getDragAfterElement(container, y) {
  const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')];

  return draggableElements.reduce((closest, child) => {
    const box = child.getBoundingClientRect();
    const offset = y - box.top - box.height / 2;
    if (offset < 0 && offset > closest.offset) {
      return { offset: offset, element: child };
    } else {
      return closest;
    }
  }, { offset: Number.NEGATIVE_INFINITY }).element;
}

form.addEventListener('submit', () => {
  const sortedItems1 = [...document.getElementById('sortable-list-1').querySelectorAll('.draggable')];
  const sortedItems2 = [...document.getElementById('sortable-list-2').querySelectorAll('.draggable')];
  const sortedOrder1 = sortedItems1.map(item => item.getAttribute('data-id')).join(',');
  const sortedOrder2 = sortedItems2.map(item => item.getAttribute('data-id')).join(',');
  sortedOrderInput1.value = sortedOrder1;
  sortedOrderInput2.value = sortedOrder2;
});
