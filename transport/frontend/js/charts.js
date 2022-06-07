

// alert('Hello wordl')
let labelPie = ['Douala','Yaounde','Buea','Limbe','Bamenda']
let dataPie = [123,235,46,190,37]
let colorPie = ['#49A9EA','#8718a3','#67a812','#2719aa','0f1113']

let pie = document.querySelector('#piechart')
let comparison = document.querySelector('#piechart').getContext('2d')

console.log(comparison,'compare')
console.log(pie,'pie');

let pieChart = new Chart(comparison, {
  type:'pie',
  data:{
    labels:labelPie,
    datasets:[{
      data:dataPie,
      backgroundColor:colorPie
    }]
  },
  options:{
    title:{
      text:"This is the sales comparison per agency",
      display:true
    }
  }
} )


let labelHist = ['January','February','March','April','June','July','August','September']
let dataHist = [45,56,34,51,61,23,82,12,93]
let colorHist = ['#2719aa','#49A9EA','#67a812','#87acb1','0f1113','#8718a3','#1e8391','#ffa500']

let stats = document.querySelector('#histogram').getContext('2d')

let hist = new Chart(stats, {
  type:'bar',
  data:{
    labels:labelHist,
    datasets:[{
      data:dataHist,
      backgroundColor:colorHist
    }]
  },
  options:{
    title:{
      text:"This is the sales statistics for the tickets",
      display:true
    },
    legend:{
      display:true
    }
  }
} )

let hits = document.querySelector('#histogram')
console.log(hist,'hist');
console.log(stats,'starts')

let labelHist1 = ['January','February','March','April','June','July','August','September']
let dataHist1 = [45,56,34,51,61,23,82,12,93]
let colorHist1 = ['#49A9EA','#1e8391','#ffa500','#67a812','#87acb1','0f1113','#8718a3','#2719aa']

let stats1 = document.querySelector('#histogram1').getContext('2d')

console.log(stats1)
let hist1 = new Chart(stats1, {
  type:'bar',
  data:{
    labels:labelHist1,
    datasets:[{
      data:dataHist1,
      backgroundColor:colorHist1
    }]
  },
  options:{
    title:{
      text:"This is the sales statistics for the tickets for Douala Agency",
      display:true
    },
    legend:{
      display:true
    }
  }
} )