let data = [
    {
        "team": "New Orleans Pelicans",
        "image": "test.png"
    },
    {
        "team": "Boston Celtics",
        "image": "test.png"
    },
    {
        "team": "Washington Wizards",
        "image": "test.png"
    },
    {
        "team": "Los Angeles Lakers",
        "image": "test.png"
    },
    {
        "team": "Houston Rockets",
        "image": "test.png"
    }
];

const ul = document.querySelector('ul');

const createListElements = ()=>{
    ul.innerHTML = '';
    data.forEach((team,i) => {
        const li = document.createElement('li')
        li.setAttribute('list-pos', i);

        li.innerHTML = `
        <div class="user">
            <img src="images/${team.image}" alt="">
            <div class="info">
                <h2>${team.team}</h2>
                <p>${team.team}</p>
            </div>
        </div>
        <h1 class="icon">&#10978;</h1>  
        `;

        ul.appendChild(li);
    });
    listenToEvents();
}

createListElements();

function listenToEvents(){
    let lists = ul.querySelectorAll('li'), current_pos, drop_pos;

    for(let li of lists) {
        li.draggable = true;

        /* Hva faen skjer her */
        li.ondragstart = function() {
            current_pos = this.getAttribute('list-pos');
            ul.style.height = ul.clientHeight + 'px';
            setTimeout(() => {
                this.style.display = "none";
            }, 0);

            ul.style.height = ul.clientHeight - this.clientHeight + 'px';
        }
        li.ondragenter = () => li.classList.add('active');
        li.ondragleave = () => li.classList.remove('active');
        li.ondragend = function() {
            this.style.display = 'flex';
            for(let active_list of lists){
                active_list.classList.remove('active');
            }
        }
        li.ondragover = (e) => e.preventDefault();
        li.ondrop = function(){
            //if(event.target === spesificElement)  ?
            ul.style.height = ul.clientHeight + this.clientHeight + 'px';

            drop_pos = this.getAttribute('list-pos');

            /* Hva skjer her? */
            data.splice(drop_pos, 0, data.splice(current_pos, 1)[0])
            //console.log(current_pos, drop_pos);

            createListElements();

        }
    }

}