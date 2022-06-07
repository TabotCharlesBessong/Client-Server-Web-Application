let dropdownStatus = false;
let dropdownClass = document.getElementById('drop');

const showDropdownMenu = () => {
    getStatus()
    if(dropdownStatus == true){
        dropdownClass.style.display = 'flex'
    }
    else{
        dropdownClass.style.display = 'none'
    }
}

const closeDropdownMenu = () => {
    if(dropdownStatus == true){
        dropdownClass.style.display = 'none'
    }
    else{
        return
    }
}

const getStatus = () => {
    return dropdownStatus = !dropdownStatus
}

let colors = ['green', 'red', 'yellow']
let seatHolder = document.getElementById('seatHolder')
const fillSeats = () => {
    for(let i=0; i<20; i++){
        let val = document.createElement('h1')
        val.textContent = `${i+1}`
        let colorState = Math.floor(Math.random() * 3)
        let seat = document.createElement('div')
        seat.append(val)
        seat.style.backgroundColor = colors[colorState]
        seatHolder.appendChild(seat)
        colorState++
    }
}