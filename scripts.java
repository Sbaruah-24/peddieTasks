function renderTime{
    var myDate = new Date();
    var year = myDate.getYear();
    if(year<1000){
        year+=1900;
    }
    var day = myDate.getDay();
    var month = myDate.getMonth();
    var daym = myDate.getDate()
}