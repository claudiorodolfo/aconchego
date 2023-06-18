public class PilhaDinamica extends Empilhavel {
    @Override
    public Object desempilhar() {
		Object dadoTopo = null;
		if (!estaVazia()) {
			dadoTopo = ponteiroTopo.getDado();
            //retrocede o ponteiro do Topo
            ponteiroTopo = ponteiroTopo.getAnterior();
            //elimina a referência ao elemento desempilhado
            if (ponteiroTopo != null)
                ponteiroTopo.setProximo(null);
            //decrementa a quantidade de dados da estrutura
            quantidade--;
		} else {
			System.out.println("Stack is empty!");
		}
		return dadoTopo;
	}

    public void enfileirar(Object dado){
		if(!estaCheia()) {
			NodoDuplo novoNodo = new NodoDuplo();
			novoNodo.setDado(dado);
			if (ponteiroFim != null) {
				ponteiroFim.setProximo(novoNodo);
			}
			novoNodo.setAnterior(ponteiroFim);
		    quantidade++;
		} else {
			System.out.println("Queue is full");
		}
	}
}