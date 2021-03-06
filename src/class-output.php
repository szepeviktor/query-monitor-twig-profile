<?php
/**
 * Formats the profile data for a QM panel.
 *
 * @package NdB\QM_Twig_Profile
 */

namespace NdB\QM_Twig_Profile;

use QM_Output_Html;
use Twig\Profiler\Dumper\HtmlDumper;

/**
 * Formats the output data for a QM panel.
 */
final class Output extends QM_Output_Html {

	/**
	 * Adds the twig profile panel to the menu.
	 *
	 * @param Collector $collector The Twig Profile collector.
	 */
	public function __construct( Collector $collector ) {
		parent::__construct( $collector );
		add_filter( 'qm/output/menus', array( $this, 'admin_menu' ), 110 );
	}

	/**
	 * The name of this panel.
	 *
	 * @return string
	 */
	public function name() {
		return __( 'Twig profile', 'ndb_qm_twig' );
	}

	/**
	 * Renders the panel.
	 *
	 * @return string
	 */
	public function output() {
		$collector = $this->collector;
		if ( ! $collector instanceof Collector ) {
			return;
		}
		$profiles = $collector->get_all();
		?>
		<div class="qm qm-non-tabular" id="qm-twig_profile">
			<div class='qm-boxed'>
				<h2><?php echo esc_html__( 'Twig profile', 'ndb_qm_twig' ); ?></h2>
			</div>
			<?php
			if ( empty( $profiles ) ) {
				echo '<div class="qm-boxed">';
				echo '<section>';
				?>
				<p><?php echo esc_html__( 'No twig profiles on this page :)', 'ndb_qm_twig' ); ?></p>
				<?php
				echo '</section>';
				echo '</div>';
			} else {
				foreach ( $profiles as $profile ) {
					echo '<div class="qm-boxed">';
					echo '<section>';
					$dumper = new HtmlDumper();
					echo wp_kses( $dumper->dump( $profile ), wp_kses_allowed_html( 'post' ) );
					echo '</section>';
					echo '</div>';
				}
			}
			?>
		</div>
		<?php
	}
}
