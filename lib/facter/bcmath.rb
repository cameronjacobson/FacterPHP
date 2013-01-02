Facter.add(:php_bcmath_installed) do
  setcode do
    Facter::Util::Resolution.exec('facter4php BCMath installed')
  end
end

Facter.add(:php_bcmath_somethingelse) do
  setcode do
    Facter::Util::Resolution.exec('facter4php BCMath somethingelse')
  end
end
