function searchFood(){
    const searchInput=document.getElementById('search').value.toLowerCase();
    const foodItem=document.querySelectorAll('.food-item');

    foodItem.forEach(item => {
        const foodName = item.getAttribute('data-name');

        if(foodName.includes(searchInput)){
            item.style.display="block";
        }else{
            item.style.display="none";
        }
    });
}
