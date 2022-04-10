const tbody = document.querySelector('.tbody')
const addBtn = document.getElementById("add")
const calcBtn = document.getElementById('calculate')


addBtn.addEventListener('click', () => {
    const trArr = document.querySelectorAll('.tr')

    let courseTitle = document.getElementById('course_title').value
    let courseCode = document.getElementById('course_code').value
    let courseCredit = document.getElementById('course_credit').value
    let gradePoint = document.getElementById('grade_point').value

    // console.log('Tile ', courseTitle)
    // console.log('Code ', courseCode)
    // console.log('Credit ', courseCredit)

    if(courseTitle && courseCode && courseCredit && gradePoint) {
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

        const gradePointData = document.createElement('td')
        gradePointData.innerText = gradePoint
        tableRow.appendChild(gradePointData)

        tbody.appendChild(tableRow)

        courseTitle = ""
        courseCode = ""
        courseCredit = ""
        gradePoint = ""

    }
})

calcBtn.addEventListener('click', () => {
    const trArr = document.querySelectorAll('.tr')
    let num = 0
    let deno = 0

    for(let i = 0; i < trArr.length; i++) {
        console.log(trArr[i].childNodes)
        num += parseInt(trArr[i].childNodes[3].innerText) * parseInt(trArr[i].childNodes[4].innerText)
        deno += parseInt(trArr[i].childNodes[3].innerText)
    }

    console.log({num, deno})
    const sgpa = (num/deno).toFixed(2)
    console.log(sgpa)

    document.getElementById('calculated_sgpa').innerText = `Your SGPA is ${sgpa}`

})

