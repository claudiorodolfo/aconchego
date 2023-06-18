public class PilhaDinamica extends Empilhavel {
    @Override
    public Object desempilhar() {
		Object dadoTopo = null;
		if (!estaVazia()) {
			dadoTopo = ponteiroTopo.getDado();
		} else {
			System.out.println("Stack is empty!");
		}
		return dadoTopo;
	}
}