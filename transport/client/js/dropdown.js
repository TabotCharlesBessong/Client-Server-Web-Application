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