const th1 = document.querySelector('.th-1')
const th1Cls = 'text-sm font-medium text-gray-400 px-6 py-4 text-left' 
th1Cls.split(' ').forEach(cls => {
    th1.classList.add(cls)
}) 
const ths = document.querySelectorAll('.ths')
const thsCls = 'text-sm font-medium text-gray-400 px-6 py-4 text-left whitespace-nowrap'
ths.forEach(th => {
    thsCls.split(' ').forEach(cls => {
        th.classList.add(cls)
    })
})
const lastTh = document.querySelector('.last-th')
const lastThCls = 'text-sm text-center font-medium text-gray-400 px-6 py-4 whitespace-nowrap' 
lastThCls.split(' ').forEach(cls => {
    lastTh.classList.add(cls)
}) 
const firstTd = document.querySelectorAll('.td-1')
const firstTdCls = 'px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-200'  
firstTd.forEach(tdOne => {
    firstTdCls.split(' ').forEach(cls => {
        tdOne.classList.add(cls)
    }) 
})
const tds = document.querySelectorAll('.tds')
const tdsCls = 'text-sm text-gray-200 px-6 py-4 whitespace-nowrap'
tds.forEach(td => {
    tdsCls.split(' ').forEach(cls => {
        td.classList.add(cls)
    })
})
const xcs = document.querySelectorAll('.xc')
const xcCls = 'text-sm text-gray-200 px-6 py-4'
xcs.forEach(xc => {
    xcCls.split(' ').forEach(cls => {
        xc.classList.add(cls)
    })
})
const tdActions = document.querySelectorAll('.tdLinks')
const tdActionsCls = 'flex justify-around w-full'
tdActions.forEach(tdAction => {
    tdActionsCls.split(' ').forEach(cls => {
        tdAction.classList.add(cls)
    }) 
})
const actions = document.querySelectorAll('.ediel')
const actionsCls = 'text-base text-blue-300 cursor-pointer p-2 m-2 whitespace-nowrap'
actions.forEach(action => {
    actionsCls.split(' ').forEach(cls => {
        action.classList.add(cls)
    })
})