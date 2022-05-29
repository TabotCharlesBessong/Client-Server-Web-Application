

alert('Hello wordl')
const labelPie = ['Douala','Yaounde','Buea','Limbe','Bamenda']
const dataPie = [123,235,46,190,37]
const colorPie = ['#49A9EA','#8718a3','#67a812','#2719aa','0f1113']


const comparison = document.querySelector('#piechart').getContext('2d')

console.log(comparison)

const pieChart = new Chart(comparison, {
  type:'Tickets Sales',
  data:{
    labels:labelPie,
    datasets:[{
      data:dataPie,
      bgColor:colorPie
    }]
  },
  options:{
    title:{
      text:"This is the sales comparison per agency",
      display:true
    }
  }
} )


const labelHist = ['January','February','March','April','June','July','August','September']
const dataHist = [45,56,34,51,61,23,82,12,93]
const colorHist = ['#2719aa','#49A9EA','#67a812','#87acb1','0f1113','#8718a3','#1e8391','#ffa500']

const stats = document.querySelector('#histogram').getContext('2d')

const hist = new Chart(stats, {
  type:'Tickets Sales',
  data:{
    labels:labelHist,
    datasets:[{
      data:dataHlabelHist,
      bgColor:colorHlabelHist
    }]
  },
  options:{
    title:{
      text:"This is the sales statistics for the tickets",
      display:true
    }
  }
} )

console.log(stats)