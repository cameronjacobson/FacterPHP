Facter.add(:php_version) do
  setcode do
    Facter::Util::Resolution.exec('facter4php Version')
  end
end
