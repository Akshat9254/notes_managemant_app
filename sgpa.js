const tbody = document.querySelector('.tbody')
const addBtn = document.getElementById("add")
const calcBtn = document.getElementById('calculate')


addBtn.addEventListener('click', () => {
    const trArr = document.querySelectorAll('.tr')
    console.log(trArr.length)
    const courseTitle = document.getElementById('course_title').value
    const courseCode = document.getElementById('course_code').value
    const courseCredit = document.getElementById('course_credit').value
    const score = document.getElementById('score').value

    // console.log('Tile ', courseTitle)
    // console.log('Code ', courseCode)
    // console.log('Credit ', courseCredit)

    if(courseTitle && courseCode && courseCredit && score) {
        const tableRow = document.createElement('tr')
        tableRow.classList.add('tr')
        
        const th = document.createElement('th')
        th.setAttribute('scope', 'row')
        th.innerText = trArr.length + 1
        tableRow.appendChild(th)

        const titleData = document.createElement('td')
        titleData.innerText = courseTitle
        tableRow.appendChild(titleData)

        const codeData = document.createElement('td')
        codeData.innerText = courseCode
        tableRow.appendChild(codeData)

        const creditData = document.createElement('td')
        creditData.innerText = courseCredit
        tableRow.appendChild(creditData)

        const scoreData = document.createElement('td')
        scoreData.innerText = score
        tableRow.appendChild(scoreData)

        tbody.appendChild(tableRow)

        courseTitle = ""
        courseCode = ""
        courseCredit = ""
        score = ""

    }
})

calcBtn.addEventListener('click', () => {
    const trArr = document.querySelectorAll('.tr')
    let num = 0
    let den = 0

    for(let i = 0; i < trArr.length; i++) {
        console.log(trArr[i])
    }

})

