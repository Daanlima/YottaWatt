document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    let gastoMensal = document.getElementById('gasto-mensal').value;
    let quantidadePlacas = Math.ceil(gastoMensal/0.95/62);
    let pesoEstimadoM2 = 12;
    document.getElementById('quantidade-placas').textContent = quantidadePlacas;
    document.getElementById('tamanho-sistema').textContent = (quantidadePlacas*0.55).toFixed(2);
    document.getElementById('quantidade-modulos').textContent = quantidadePlacas;
    document.getElementById('producao-mensal').textContent = (quantidadePlacas*62).toFixed(2);
    document.getElementById('producao-anual').textContent = (quantidadePlacas*62*12).toFixed(2);
    document.getElementById('area-telhado').textContent = (quantidadePlacas*2.5).toFixed(2);
    document.getElementById('peso-estimado-m2').textContent = (pesoEstimadoM2).toFixed(2);
    document.getElementById('reducao-co2').textContent = (quantidadePlacas*62*0.295*12).toFixed(2);
    document.getElementById('arvores-plantadas').textContent = (quantidadePlacas*62*0,295*12/1000*7,14).toFixed(2);
    document.getElementById('economia-mensal').textContent = (quantidadePlacas*62*0.95).toFixed(2);
    document.getElementById('economia-total').textContent = ((quantidadePlacas*62*0.95*12)*Math.pow(1+0.16,30)).toFixed(2);
});