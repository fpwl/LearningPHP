function shapeType (shape) {
    document.getElementById("shapeCalculatorResults").innerHTML = "";
    if (shape === 'circle') {
        document.getElementById('circleInput').style.display = 'block';
        document.getElementById('squareInput').style.display = 'none';
        document.getElementById('rectangleInput').style.display = 'none';
    } else if (shape === 'square') {
        document.getElementById('squareInput').style.display = 'block';
        document.getElementById('circleInput').style.display = 'none';
        document.getElementById('rectangleInput').style.display = 'none';
    } else if (shape === 'rectangle') {
        document.getElementById('rectangleInput').style.display = 'block';
        document.getElementById('squareInput').style.display = 'none';
        document.getElementById('circleInput').style.display = 'none';
    } else if (shape === '') {
        document.getElementById('rectangleInput').style.display = 'none';
        document.getElementById('squareInput').style.display = 'none';
        document.getElementById('circleInput').style.display = 'none';
    }
}

