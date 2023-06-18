public class PilhaDinamica extends Empilhavel {
    @Override
    public Object desempilhar() {
		Object dadoTopo = null;
		if (!estaVazia()) {
			dadoTopo = ponteiroTopo.getDado();
            ponteiroTopo = ponteiroTopo.getAnterior();
            quantidade--;
		} else {
			System.out.println("Stack is empty!");
		}
		return dadoTopo;
	}
}