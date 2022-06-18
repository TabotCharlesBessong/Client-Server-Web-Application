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

let seatState = false
let calc = document.getElementById('calc')
let calcContent = document.createElement('h1')
const seatPrice = 5000

let seatHolder = document.getElementById('seatHolder')
let seatNum = document.createElement('h1')
const fillSeats = () => {
    let seatCount = 0
    for(let i=0; i<20; i++){
        let seat = document.createElement('button')
        seat.id = `seat${i+1}`
        seat.textContent = `${i+1}`
        seat.style.backgroundColor = 'green'
        seat.className = 'seat'
        seatHolder.appendChild(seat)
        seat.addEventListener('click', function(){
            if(changeState()){
                seat.style.backgroundColor = 'red'
                seat.disabled = true
                seat.style.opacity = 0.65
                seatCount += 1
                seatNum = seatNum +`| ${seat.textContent} |`
                calcContent.textContent = `Seats: ${seatCount} | Total: XAF ${seatCount * seatPrice}`
            }
            changeState()
            calc.append(calcContent)
        })

    }
}


const changeState = () => {
    return seatState = !seatState
}

function refresh(){
    for(let i=0; i<20; i++){
        let seat = document.getElementById(`seat${i+1}`)
        if(seat.style.backgroundColor === 'red'){
            seat.style.backgroundColor = 'green'
            seat.disabled = false
            seatCount = 0
            seat.style.opacity = 1
        }
    }
    calcContent.textContent = `Seats: 0 | Total: XAF 0`
}

let Tname = document.getElementById('name')
let Tsid = document.getElementById('sid')
let Torigin = document.getElementById('origin')
let Tdestination = document.getElementById('destination')
let Tprice = document.getElementById('price')

document.body.addEventListener('load', ()=>{
    Tprice.textContent = seatCount * seatPrice
})


let ticket = document.getElementById('tick')
let nameHolder = document.getElementById('nameHolder')
let sidHolder = document.getElementById('sidHolder')
let seatNumHolder = document.getElementById('seatHolder')
let originHolder = document.getElementById('originHolder')
let destinationHolder = document.getElementById('destinationHolder')
let priceHolder = document.createElement('priceHolder')


function ticketFiller(){
    let nameLabel = document.createElement('h1')
    let sidLabel = document.createElement('h1')
    let seatLabel = document.createElement('h1')
    let originLabel = document.createElement('h1')
    let destinationLabel = document.createElement('h1')
    let priceLabel = document.createElement('h1')
    let Oname = document.createElement('h1')
    let sid = document.createElement('h1')
    let seat = document.createElement('h1')
    let origin = document.createElement('h1')
    let destination = document.createElement('h1')
    let price = document.createElement('h1')
    nameLabel.textContent = 'Name'
    sidLabel.textContent = 'Id Number'
    seatLabel.textContent = 'Seat Num'
    originLabel.textContent = 'Origin'
    destinationLabel.textContent = 'Destination'
    priceLabel.textContent = 'Price'
    Oname.textContent = Tname.textContent
    sid.textContent =Tsid.textContent
    seat.textContent = seatNum.textContent
    origin.textContent = Torigin.textContent
    destination.textContent = Tdestination.textContent
    price.textContent = Tprice.textContent
    document.body.addEventListener('load', ()=>{
        nameHolder.append(nameLabel)
        nameHolder.append(Oname)
        sidHolder.append(sidLabel)
        sidHolder.append(sid)
        seatNumHolder.append(seatLabel)
        seatNumHolder.append(seat)
        originHolder.append(originLabel)
        originHolder.append(origin)
        destinationHolder.append(destinationLabel)
        destinationHolder.append(destination)
        priceHolder.append(priceLabel)
        priceHolder.append(price)
        ticket.appendChild(nameHolder)
        ticket.appendChild(sidHolder)
        ticket.appendChild(seatHolder)
        ticket.appendChild(originHolder)
        ticket.appendChild(destinationHolder)
        ticket.appendChild(priceHolder)
    })
    window.location.href = '../documents/ticket.php'
   
    console.log('This is the ticket: ', ticket);
}

