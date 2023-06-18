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
            //não deixar ponteiroInicio largado para trás
            else {
                ponteiroInicio = novoNodo;
            }
			novoNodo.setAnterior(ponteiroFim);
            //ponteiroFim é jogado pra frente 
            ponteiroFim = novoNodo;
		    quantidade++;
		} else {
			System.out.println("Queue is full");
		}
	}

    public void atualizar(int posicao, Object elemento) {
		if (!estaVazia()) {
			if ((posicao > 0) && (posicao <= quantidade)) {
				NoDuplo ponteiroAuxiliar = ponteiroInicio;
				for (int i = 0; i < posicao; i++) {
					ponteiroAuxiliar = ponteiroAuxiliar.getProximo();
				}
				dado = ponteiroAuxiliar.getDado();
            } else {
               throw new UnderflowException();
            }
		} 
	}

}