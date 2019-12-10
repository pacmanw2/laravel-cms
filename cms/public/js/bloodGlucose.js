/**
 * Make a GET request to the
 * endpoint: /bg
 * which returns ALL of the records in the table
 */
function getGlucoseData() {
    let data = $.get( "/bg", function( data ) {
        $( ".result" ).html( data );
        console.log(data[0]);
        let dailyData = get_daily_records(data);

    });
}

/**
 * Return a list of Objects where each Object contains a list of
 * records that cover a 24 hr period. So List[0] would contain all of the
 * data for Day 1
 * @param {Object} data - contains all of the records
 * from the blood glucose database.
 */
function getDailyRecords(data) {
    // starting from first element, get the next 24hrs worth of records
    let recordStart = data.shift();
    let startTime = recordStart['Device Timestamp'];

    let tempList = data.slice(0,10);
    let xLabels = tempList.map(tempList['Device Timestamp']);
    console.log(xLabels);
}






