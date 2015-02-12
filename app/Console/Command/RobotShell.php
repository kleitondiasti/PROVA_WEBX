<?php 

App::uses('AppShell', 'Console/Command');

class RobotShell extends AppShell {

	public $uses = array('Url', 'Email');

    public function main() {
        $urls = $this->Url->find('all', array(
        	'conditions' => array(
        		'Url.visited' => 'no'
        		)
        	)
        );

        foreach ($urls as $url) {
        	$conteudo = file_get_contents($url['Url']['url']);
        	preg_match_all('/<a href=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>"\']))+.)["\']?>/i', $conteudo, $resultados);
        	preg_match_all('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $conteudo, $resultados_email);        	

        	foreach ($resultados['1'] as $key => $resultado) {
        		$url_resultado['Url'][$key]['url'] = $resultado;
        		if ($this->Url->saveAll(array('url' => $url_resultado['Url'][$key]['url']))) {
        			
       			}
        	}

        	foreach ($resultados_email['0'] as $key => $resultado_email) {
        		$url_resultado_email['Email'][$key]['email'] = $resultado_email;
        		if ($this->Email->saveAll(array('email' => $url_resultado_email['Email'][$key]['email']))) {
        			
       			}
        	}

        	$this->Url->id = $url['Url']['id'];
        	$this->Url->saveField('visited', 'yes');       	
        }

    }
}



?>