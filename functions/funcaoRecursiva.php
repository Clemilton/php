<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
				//Inicio: Diretor Comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' =>array(
						//Inicio Gerente de Vendas
						array(
							'nome_cargo' => 'Gerente de vendas'
						)
						//Termino Gerente de Vendas
					)
				),
				//Termino: Diretor Comercial

				//Inicio: Diretor Financeiro
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' =>array(
						//Inicio: Gerente de Contas a pagar
						array(
							'nome_cargo' => 'Gerente de Contas a Pagar',
							'subordinados' =>array(
								//Inicio: Supervisor de Pagamentos
									array(
										'nome_cargo' => 'Supervisor de Pagamentos'
									)
								//Termino: Supervisor de Pagamentos
							)
						),
						//Termino: Gerente de Contas a pagar
						
						//Inicio Gerente de Compras
						array(
								'nome_cargo'=>'Gerente de Compras',
								'subordinados' => array(

									array(
											'nome_cargo'=>'Supervisor de Suprimentos'
									)
								)
							)
						//Termino: Gerente de Compras
					)


				)
				//Termino: Diretor Financeiro
			)
	)
);

function exibe($cargos){
	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html.="<li>";

		$html .=$cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	}

	$html .= '</ul>';

	return $html;

}

echo exibe($hierarquia);
?>