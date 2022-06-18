

let labelHist = ['January','February','March','April','June','July','August','September']
let dataHist = [45,56,34,51,61,23,82,12,93]
let colorHist = ['#2719aa','#49A9EA','#67a812','#87acb1','0f1113','#8718a3','#1e8391','#ffa500']

let stats = document.querySelector('#histogram1').getContext('2d')

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
      text:"This is the chart comparison of one sub-agency per month",
      display:true
    },
    legend:{
      display:true
    }
  }
} )