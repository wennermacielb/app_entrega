function aplicarMascara(input, tipo) {
    let valor = input.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    
    if (tipo === "cpf_cnpj") {
        if (valor.length <= 11) {
            // Máscara para CPF (000.000.000-00)
            valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
            valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
            valor = valor.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
        } else {
            // Máscara para CNPJ (00.000.000/0000-00)
            valor = valor.replace(/(\d{2})(\d)/, "$1.$2");
            valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
            valor = valor.replace(/(\d{3})(\d{1,4})$/, "$1/$2");
            valor = valor.replace(/(\d{4})(\d{1,2})$/, "$1-$2");
        }
    } else if (tipo === "cep") {
        // Máscara para CEP (00000-000)
        valor = valor.replace(/(\d{5})(\d{1,3})$/, "$1-$2");
    }
    
    input.value = valor; // Atualiza o valor do campo com a máscara aplicada
}
