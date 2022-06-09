
const busData = fetch("../PHP/SubBacklogarrayForBusinfo.php")
.then(res => res.json())

console.log(busData);
// const data = re
// const fetchBusData = ()=>{
//     fetch('../')
// }
console.log(busData)

const busInfo = [
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'left'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'loading'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'left'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'travelling'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'left'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'left'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'left'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'loading'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'left'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'travelling'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'left'},
    {busID:278,origin:'Buea',destination:'Yaounde',seats:34,status:'left'},
];

let mailData = [
{mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},
    {mailID: 666, package:'Chair', Sname: "Tabot Charles",Rname: "I_Am_Anonymous", origin: "Kuwait", destination: "Dakar"},

]

let jData = [
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
    {passId:23,NIC:'lt3425du7621',name:'Bebongchu Yannick',origin:'Garoua',destination:'Ouesso'},
]



const agencyTable = document.getElementById("agencyTable");
const pasTable = document.getElementById("pTable");
const journeyTable = document.getElementById("jTable");
let pas = document.createElement("table")
let table = document.createElement('table');
let journey = document.createElement('table');

let bool = false;
let abool = false;
let jbool = false;



const populatePassengerTable =() => {
    let rowHeader = table.insertRow();
    let th1 = rowHeader.insertCell();
    th1.textContent = "Passenger ID"
    let th2 = rowHeader.insertCell();
    th2.textContent = "Natian ID No"
    let th3 = rowHeader.insertCell();
    th3.textContent = "Full Name"
    let th4 = rowHeader.insertCell();
    th4.textContent = "Origin"
    let th5 = rowHeader.insertCell();
    th5.textContent = "Destination"
    // rowHeader.className = "table-header";
    for(let agency of jData){
        let row = table.insertRow();
        let cellOne = row.insertCell();
        let cellTwo = row.insertCell();
        let cellThree = row.insertCell();
        let cellFour = row.insertCell();
        let cellFive = row.insertCell();
        cellFive.id ="cell-five";
        cellOne.textContent = agency.passId
        cellTwo.textContent = agency.NIC
        cellThree.textContent = agency.name
        cellFour.textContent = agency.origin
        cellFive.textContent = agency.destination
    }
    agencyTable.append(table);
}

const populateMailTable = () => {
    let rowHeader = pas.insertRow();
    let th1 = rowHeader.insertCell();
    th1.textContent = "Mail ID"
    let th2 = rowHeader.insertCell();
    th2.textContent = "Package"
    let th3 = rowHeader.insertCell();
    th3.textContent = "Sender's Name"
    let th4 = rowHeader.insertCell();
    th4.textContent = "Receiver's Name"
    let th5 = rowHeader.insertCell();
    th5.textContent = "Origin"
    let th6 = rowHeader.insertCell();
    th6.textContent = "Destination"
    rowHeader.className = "table-header";
    for(let passenger of mailData){
        let row = pas.insertRow();
        let cellOne = row.insertCell();
        let cellTwo = row.insertCell();
        let cellThree = row.insertCell();
        let cellFour = row.insertCell();
        let cellFive = row.insertCell();
        let cellSix = row.insertCell();
        cellOne.textContent = passenger.mailID
        cellTwo.textContent = passenger.package
        cellThree.textContent = passenger.Sname
        cellFour.textContent = passenger.Rname
        cellFive.textContent = passenger.origin
        cellSix.textContent = passenger.destination
    }
    pasTable.append(pas);
}

const populateJourneyTable = () => {
    let rowHeader = journey.insertRow();
    let th1 = rowHeader.insertCell();
    th1.textContent = "Bus ID"
    let th2 = rowHeader.insertCell();
    th2.textContent = "Number Of Seats"
    let th3 = rowHeader.insertCell();
    th3.textContent = "Origin"
    let th4 = rowHeader.insertCell();
    th4.textContent = "Destination"
    // let th5 = rowHeader.insertCell();
    // th5.textContent = "Status"
    rowHeader.className = "table-header";
    for(let jour of busInfo){
        let row = journey.insertRow();
        let cellOne = row.insertCell();
        let cellTwo = row.insertCell();
        let cellThree = row.insertCell();
        let cellFour = row.insertCell();
        let cellFive = row.insertCell();
        cellOne.textContent = jour.busID
        cellTwo.textContent = jour.seats
        cellThree.textContent = jour.origin
        cellFour.textContent = jour.destination
        // cellFive.textContent = jour.status
    }
    journeyTable.append(journey);
}

const hideTable = () => {
    let agencyTable = document.getElementById('agencyTable');
    toggleAgency() ? agencyTable.style.display = "block" : agencyTable.style.display = "none"
}

const hidePassenger =() =>{
    let table = document.getElementById('pTable');
    togglePassenger() ? table.style.display = "block" : table.style.display = "none";
}

const hideJourney = () => {
    let journeyTable = document.getElementById('jTable');
    toggleJourney() ? journeyTable.style.display = "block" : journeyTable.style.display = "none"
}

function toggleAgency(){
    return bool = !bool;
}

const togglePassenger = () =>{
    return abool = !abool
}

const toggleJourney = () => {
    return jbool = !jbool;
}


const loader = () => {
    populatePassengerTable();
    populateMailTable();
    populateJourneyTable();
}